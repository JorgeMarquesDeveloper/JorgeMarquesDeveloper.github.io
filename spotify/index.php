<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Music Player</title>
    <style>
        body {
            background-color: #121212;
            color: #fff;
        }
        .container {
            padding-top: 80px;
        }
        .album-cover {
            width: 100%;
            max-width: 300px;
        }
        #playButton {
            font-size: 24px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="album-cover" src="https://m.media-amazon.com/images/I/81wiac9bakL._UF350,350_QL50_.jpgpath/to/your/album-cover.jpg" alt="Album Cover">
        </div>
        <div class="col-md-8">
            <h2>Now Playing</h2>
            <h4>Artist Name</h4>
            <p>Song Title</p>
            <audio id="audioPlayer" controls>
                <source src="path/to/your/song.mp3" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
            <button id="playButton" class="btn btn-primary">Play</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.getElementById('playButton').addEventListener('click', function () {
        var audioPlayer = document.getElementById('audioPlayer');

        if (audioPlayer.paused) {
            audioPlayer.play();
            document.getElementById('playButton').innerHTML = 'Pause';
        } else {
            audioPlayer.pause();
            document.getElementById('playButton').innerHTML = 'Play';
        }
    });
</script>

</body>
</html>
