<template>
        <div>
            <div id="myVideoCall"></div>
            <!-- <video id="video-chat-window" ></video> -->
            <br/>
            <button  type="button" class="btn btn-danger btn-lg">
            <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>End Call</button>
        </div>
</template>

 <script>
export default {
    name: 'video-chat',
    data: function () {
        return {
            accessToken: ''
        }
    },
    methods : {
        getAccessToken : function () {
            const _this = this
            const axios = require('axios')
            
            // Request a new token
            axios.get('/access_token')
                .then(function (response) {
                    _this.accessToken = response.data
                })
                .catch(function (error) {
                    console.log(error);
                })
                .then(function () {
                    _this.connectToRoom()
                });
        },
        connectToRoom : async function () {
            const _this = this
            const { connect, createLocalVideoTrack } = require('twilio-video');
            
            // Join to the Room with the given AccessToken and ConnectOptions.
            const room = await connect(this.accessToken, { audio: false, video: { width: 640, height: 640 } });
            
            // Make the Room available in the JavaScript console for debugging.
            window.room = room;
            this.addLocalParticipant(room.localParticipant)
            // Subscribe to the media published by RemoteParticipants already in the Room.
            room.participants.forEach(participant => this.addRemoteParticipant(participant));
            room.on('participantConnected', participant => this.addRemoteParticipant(participant));
        },
        addLocalParticipant: function(participant) {
            
            // Create the video container
            this.createVideoContainer(participant)
            // Attach the 
            participant.tracks.forEach(publication => {
                
                if ('audio' == publication.kind)
                    return
                this.publishTrack(publication.track, participant)
            })
        },
        addRemoteParticipant: function(participant) {
            this.createVideoContainer(participant)
            // Set up listener to monitor when a track is published and ready for use
            participant.on('trackSubscribed', track => {
                this.publishTrack(track, participant);
            });
        },
        createVideoContainer: function (participant) {
            
            // // Add a container for the Participant's media.
            // const div = document.createElement('div');
            // div.id = participant.sid;
         
            // document.getElementById('myVideoCall').appendChild(div);
        },
        publishTrack: ( track, participant ) => {
            const videoContainer = document.getElementById("myVideoCall");
            videoContainer.appendChild(track.attach())
            if($("video")[0].length>1)
            for(var i=0;i< $("video")[0].length;i++)
            {       if($("video")[0].currentTime==0)
                    $("video")[i].remove()
            }
        }
    },
    mounted : function () {
        this.getAccessToken()
    }
}
</script>