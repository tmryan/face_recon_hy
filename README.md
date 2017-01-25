# face_recon_hy

# Brought to you by Team Hell Yeah!

##### Instructions:
FaceRecon was the group project required for my CS160 Software Engineering course.

We made a website with user authentication, and the ability to upload and view short movies. The movies were checked on the server to verify they weren't garbage (using ffprobe) and then processed using OpenCV/OpenFace, FaceTracker, PupilTracker, and some other libraries. The result was a facial mesh being created on a per frame basis, with the resulting video embedded into the user account page. It was a lot of fun and I definitely learned a ton during the process. It was a challenging and rewarding experience.

For our server, we used Apache 2.0 in a linux Ubuntu environment. For implementation, we used a mixture of web technologies, compiled code, and scripts (HTML5 and CSS3, PHP, C++, and C). I mostly dealt with the website itself and its supporting PHP.
