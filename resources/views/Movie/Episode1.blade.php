@extends('Layout.Layout_episode')
@section('body')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>HLS Video Player</title>
</head>
<body>

<video id="video" width="640" height="360" controls></video>

<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script>
    const video = document.getElementById('video');
    const videoSrc = 'https://www.dailymotion.com/cdn/manifest/video/x9f36p0.m3u8?sec=kSY22skLPkFTmcOhTXzTNyIMVhfATZWEeDi_QGZlCNN_g_pHr9-R8Qj24SHiu0MD_urwkcp7_-xHutg67h9gZA&dmTs=619779&dmV1st=407d9acc-fd65-4320-b8ca-6432120f6650'; // Thay bằng link thật

    if (Hls.isSupported()) {
        const hls = new Hls();
        hls.loadSource(videoSrc);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED, function () {
            video.play();
        });
    } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        // Safari native support
        video.src = videoSrc;
        video.addEventListener('loadedmetadata', function () {
            video.play();
        });
    } else {
        alert('Trình duyệt của bạn không hỗ trợ HLS.');
    }
</script>

</body>
</html>

@stop()
