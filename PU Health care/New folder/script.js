// Initialize variables
let localStream;
let pc;
const drone = new Scaledrone('your-channel-id'); // Replace 'your-channel-id' with your Scaledrone channel ID
const roomName = 'video-call-room';

// HTML elements
const localVideo = document.getElementById('localVideo');
const remoteVideo = document.getElementById('remoteVideo');
const commentBox = document.getElementById('commentBox');
const endCallBtn = document.getElementById('endCall');

// STUN server for WebRTC
const configuration = {
  iceServers: [{ urls: 'stun:stun.l.google.com:19302' }]
};
 
 
 
