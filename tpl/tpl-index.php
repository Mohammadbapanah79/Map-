<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7Map</title>
    <link href="favicon.png" rel="shortcut icon" type="image/png">

    <link rel="stylesheet" href="assets/css/styles.css<?= "?v=" . rand(99, 9999999) ?>" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

</head>

<body>
    <div class="main">
        <div class="head">
            <div class="search-box">
                <input type="text" id="search" placeholder="دنبال کجا می گردی؟">
                <div class="clear"></div>
                <div class="search-results">
                    <div class="result-item" data-lat='111' data-lng='222'>
                        <span class="loc-type">رستوران</span>
                        <span class="loc-title">رستوران و قوه خانه سنتی سون لرن</span>
                    </div>
                    <div class="result-item" data-lat='111' data-lng='222'>
                        <span class="loc-type">دانشگاه</span>
                        <span class="loc-title">دانشگاه شریف</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mapContainer">
            <div id="map"></div>
        </div>
        <img src="assets/img/current.png" class="currentLoc">
    </div>

    <div class="modal-overlay" style="display: none;">
        <div class="modal">
            <span class="close">x</span>
            <h3 class="modal-title">ثبت لوکیشن</h3>
            <div class="modal-content">
                <form id='addLocationForm' action="<?= siteUrl('process/addLocation.php') ?>" method="post">
                    <div class="field-row">
                        <div class="field-title">مختصات</div>
                        <div class="field-content">
                            <input type="text" name='lat' id="lat-display" readonly
                                style="width: 160px;text-align: center;">
                            <input type="text" name='lng' id="lng-display" readonly
                                style="width: 160px;text-align: center;">
                        </div>
                    </div>
                    <div class="field-row">
                        <div class="field-title">نام مکان</div>
                        <div class="field-content">
                            <input type="text" name="title" id='l-title' placeholder="مثلا: شرکت تست .... ">
                        </div>
                    </div>
                    <div class="field-row">
                        <div class="field-title">نوع</div>
                        <div class="field-content">
                            <select name="type" id='l-type'>
                                <?= var_dump(locationTypes); ?>
                                <option>انتخاب کنید</option>
                                <?php foreach (locationTypes as $key => $value): ?>
                                    <option value="<?= $key ?>"><?= $value ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="field-row">
                        <div class="field-title">ذخیره نهایی</div>
                        <div class="field-content">
                            <input type="submit" value=" ثبت ">
                        </div>
                    </div>
                    <div class="ajax-result"></div>
                </form>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        <?php if ($location): ?>
            L.marker([<?= $location->lat ?>, <?= $location->lng ?>]).addTo(map).bindPopup("<?= $location->title ?>").openPopup();
        <?php endif; ?>
    </script>
</body>

</html>