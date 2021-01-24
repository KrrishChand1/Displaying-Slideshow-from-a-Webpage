<!DOCTYPE>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Slideshow</title>
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            font: 100% Verdana, Arial, Helvetica, sans-serif;
            font-size: 14px;
        }
    .gallery {
            border: 1px #ccc solid;
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            text-align: center;
        }
        .gallery .gallery-nav {
            margin-bottom: 40px;
        }

        .gallery .gallery-nav a:first-child {
            margin-right: 10px;
        }
        .gallery .gallery-nav a:last-child {
            margin-left: 10px;
        }
        .gallery .gallery-image img {
            max-width: 100%;
            height: auto;
        }
        .gallery .gallery-image-label {
            color: #777;
        }
    a {
            color: #333;
        }
    a:hover {
            color: #cc0000;
        }
    .sp {
            padding-right: 40px;
        }
    </style>
</head>
<body>
    <div class="gallery">
        <div class="gallery-nav">
            <a href="?img=<?=$first;?>">First</a>
            <a href="?img=<?=$prev;?>">Previous</a>
            <span class="sp"></span>
            <a href="?img=<?=$next;?>">Next</a>
            <a href="?img=<?=$last;?>">Last</a>
        </div>
        <div class="gallery-image">
            <img src="<?=WEBIMGDIR;?><?=$curr;?>" alt="" />
        </div>
        <p class="gallery-image-label"><?=$caption;?></p>
    </div>
</body>
</html>