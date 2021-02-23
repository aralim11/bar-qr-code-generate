<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BarQrCode</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="container text-center" style="margin-top: 50px;">
                    <h3 class="mb-6">Generate Barcode</h3>
                    <div>{!! DNS1D::getBarcodeHTML('4445645656', 'C39') !!}</div></br>
                    <div>{!! DNS1D::getBarcodeHTML('4445645656', 'POSTNET') !!}</div></br>
                    <div>{!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA') !!}</div></br>
                    <div>{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</div></br>
                </div>
            </div>

            <div class="col-md-6">
                <div class="container text-center" style="margin-top: 50px;">
                    <h3 class="mb-6">Generate QR Code</h3>
                    <div>{!! QrCode::size(200)->backgroundColor(255,255,204)->generate('Md. Abdul Alim') !!}</div></br>
                    <div>{!! QrCode::encoding('UTF-8')->generate('QR code with special symbols ♠♥!!'); !!}</div></br>
                    <div>{!! QrCode::margin(10)->generate('Md. Abdul Alim') !!}</div></br>
                    <div>{!! QrCode::BTC('bitcoin address', 0.334) !!}</div></br>
                    <div>{!!
                                QrCode::size(500)->BTC('address', 0.0034, [
                                    'label' => 'my label',
                                    'message' => 'my message',
                                    'returnAddress' => 'https://www.returnaddress.com'
                                ]);
                        !!}</div></br>
                    <div>{!! QrCode::SMS('555-555-5555', 'Body of the message') !!}</div></br>
                    <div>{!! QrCode::phoneNumber('555-555-5555') !!}</div></br>
                    <div>{!! QrCode::email('foo@bar.com', 'This is the subject.', 'This is the message body.') !!}</div></br>
                    <div>{!! QrCode::geo(37.822214, -122.481769) !!}</div></br>
                    <div>{!! QrCode::wiFi([
                            'encryption' => 'WPA/WEP',
                            'ssid' => 'ihelpBD',
                            'password' => 'iHelpBD1234',
                            'hidden' => 'Whether the network is a hidden SSID or not.'
                        ]); !!}</div></br>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
