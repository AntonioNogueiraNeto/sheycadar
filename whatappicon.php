<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
   


    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

    <!-- Ajax whatsappicon -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>


    <title>
        Sheycadar Turismo
    </title>
</head>

<body>



    <style>
        .btnZap {
            position: fixed;
            left: 20px;
            bottom: 20px;
            z-index: 999999999;
        }

        .btnZap:hover {
            cursor: pointer;
        }

        @keyframes whatsapp-anim {
            0% {
                transform: scale(1);
            }

            20% {
                transform: scale(0.9);
            }

            40% {
                transform: scale(1.1);
            }

            60% {
                transform: scale(1);
            }

            80% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>

    <script async type="text/javascript" src="//wurfl.io/wurfl.js"></script>
    <script>
        var zap_telefone = '5531997910130';
        var zap_mensagem = 'Olá!!!';
        var zap_exibirPulsar = eval(('True').toLowerCase());
        var zap_apresentarContato = eval(('False').toLowerCase());

        function detectarDispositivoPrincipal() {
            let linkRedirecionamentoWhatsapp = "";

            if (zap_apresentarContato) {
                linkRedirecionamentoWhatsapp = ('https://wa.me/' + zap_telefone + '?text=' + zap_mensagem);
            }
            else {
                if (WURFL.is_mobile === true && WURFL.form_factor === "Smartphone") {
                    linkRedirecionamentoWhatsapp = ('https://api.whatsapp.com/send?phone=' + zap_telefone + '&text=' + zap_mensagem);
                } else {
                    linkRedirecionamentoWhatsapp = ('https://web.whatsapp.com/send?phone=' + zap_telefone + '&text=' + zap_mensagem);
                }
            }

            if (typeof GoogleAds_HashWhatsapp != "undefined" && GoogleAds_HashWhatsapp.length > 0) {
                GoogleAds_gtag_report_conversion(linkRedirecionamentoWhatsapp, GoogleAds_HashWhatsapp);
            } else {
                window.open(linkRedirecionamentoWhatsapp, '_blank');
            }
        }
    </script>
    <span id="whats_flutuante"></span>
    <script>
        $('#whats_flutuante').append('<div class="btnZap">' +
            '<span onclick="javascript:detectarDispositivoPrincipal()">' +
            (zap_exibirPulsar ? '<section class="tada infinite animated" data-wow-duration="2s" style="z-index: 999999999; visibility: visible; animation-duration: 2s; animation-name: whatsapp-anim; color: #fff;"><img loading="lazy" alt="WhatsApp" src="https://www.c2tiapps.com//Plugins/WhatsappIcon/imagens/whats1.png" style="max-width: 80px;"/></section>'
                : '<section style="z-index: 999999999; visibility: visible; color: #fff;"><img loading="lazy" src="https://www.c2tiapps.com//Plugins/WhatsappIcon/imagens/whats1.png" style="max-width: 80px;" alt="WhatsApp"/></section>'
            ) +
            '</span>' +
            '</div>');
    </script>



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- Acomppanhamento Global de todos os Sites criados na C2TI -->










    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=6426d93abba70e0012f39456&product=inline-share-buttons&source=platform"
        async="async"></script>
</body>

</html>
<script>console.log('%cCache de arquivo', 'background-color: #009688; padding:3px 15px')</script>