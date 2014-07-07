Device Open DataBase
===============

Use the following example to get information about a device.

<pre>
  $dodb = new DODBApi();
  $device_info = $dodb->getBrandModelInfo('Samsung', 'Galaxy Note 3');
</pre>

<b>The following code shold return</b>
<pre>
stdClass Object
(
    [brand] => Samsung
    [model] => Galaxy Note 3
    [votes] => stdClass Object
        (
            [design] => 7.7
            [features] => 8.2
            [performance] => 8.2
        )

    [attributes] => stdClass Object
        (
            [General] => stdClass Object
                (
                    [2G Network] => GSM 850 / 900 / 1800 / 1900 - all models
                    [3G Network] => HSDPA 850 / 900 / 1900 / 2100 - N9005, N9002, N9006 HSDPA 850 / 1900 / 2100 - N900W8
                    [4G Network] => LTE 800 / 850 / 900 / 1800 / 2100 / 2600 - N9005
                    [SIM] => Micro-SIM
                    [Announced] => 2013, September
                    [Status] => Available. Released 2013, September
                )

            [Body] => stdClass Object
                (
                    [Dimensions] => 151.2 x 79.2 x 8.3 mm (5.95 x 3.12 x 0.33 in)
                    [Weight] => 168 g (5.93 oz)
                )

            [Display] => stdClass Object
                (
                    [Type] => Super AMOLED capacitive touchscreen, 16M colors
                    [Size] => 1080 x 1920 pixels, 5.7 inches (~386 ppi pixel density)
                    [Multitouch] => Yes
                    [Protection] => Corning Gorilla Glass 3
                )

            [Sound] => stdClass Object
                (
                    [Alert types] => Vibration; MP3, WAV ringtones
                )

            [Memory] => stdClass Object
                (
                    [Card slot] => microSD, up to 64 GB
                    [Internal] => 16/32/64 GB storage, 3 GB RAM
                )

            [Data] => stdClass Object
                (
                    [GPRS] => Yes
                    [EDGE] => Yes
                    [Speed] => HSDPA, 42 Mbps; HSUPA; LTE, Cat4, 50 Mbps UL, 150 Mbps DL
                    [WLAN] => Wi-Fi 802.11 a/b/g/n/ac, dual-band, DLNA, Wi-Fi Direct, Wi-Fi hotspot
                    [Bluetooth] => v4.0, A2DP, EDR, LE
                    [NFC] => Yes
                    [Infrared port] => Yes
                    [USB] => microUSB v3.0 (MHL 2), USB Host
                )

            [Camera] => stdClass Object
                (
                    [Primary] => 13 MP, 4128 x 3096 pixels, autofocus, LED flash,  check quality
                    [Features] => Dual Shot, Simultaneous HD video and image recording, geo-tagging, touch focus, face and smile detection, image stabilization, panorama, HDR
                    [Video] => 2160p@30fps, 1080p@60fps (N9005, N9002)/ 1080p (N9000),  check quality
                    [Secondary] => 2 MP, 1080p@30fps
                )

            [Features] => stdClass Object
                (
                    [OS] => Android OS, v4.3 (Jelly Bean), upgradable to v4.4.2 (KitKat)
                    [Chipset] => Qualcomm Snapdragon 800 (N9005, N9002)/ Exynos 5 Octa 5420 (N9000)
                    [CPU] => Quad-core 2.3 GHz Krait 400 (N9005, N9002)/ Quad-core 1.9 GHz Cortex-A15 & quad-core 1.3 GHz Cortex-A7 (N9000)
                    [GPU] => Adreno 330 (N9005, N9002)/ Mali-T628 MP6 (N9000)
                    [Sensors] => Accelerometer, gyro, proximity, compass, barometer, temperature, humidity, gesture
                    [Messaging] => SMS(threaded view), MMS, Email, Push Mail, IM, RSS
                    [Browser] => HTML5
                    [Radio] => No
                    [GPS] => Yes, with A-GPS, GLONASS
                    [Java] => Yes, via Java MIDP emulator
                    [Colors] => Black, White, Pink, Merlot Red, Rose Gold Black, Rose Gold White
                )

            [Battery] => stdClass Object
                (
                    [Stand-by] => (2G) / Up to 420 h (3G)
                    [Talk time] => (2G) / Up to 21 h (3G)
                )

            [Misc] => stdClass Object
                (
                    [SAR EU] => 0.29 W/kg (head)   0.36 W/kg (body)
                    [Price group] => About 400 EUR
                )

            [Tests] => stdClass Object
                (
                    [Display] => Contrast ratio: Infinite (nominal) / 3.997:1 (sunlight)
                    [Loudspeaker] => Voice 70dB / Noise 66dB / Ring 78dB
                    [Audio quality] => Noise -96.5dB / Crosstalk -96.3dB
                    [Camera] => Photo  /  Video
                    [Battery life] => Endurance rating 75h
                )

        )

)
</pre>

For any questions you can send me an email at samuel.todosiciuc@gmail.com
