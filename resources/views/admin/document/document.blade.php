<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/starter_kit_breadcrumbs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 13:47:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Breadcrumbs - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="admin/assets/img/favicon.ico"/>
    <link href="admin/assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="admin/assets/js/loader.js"></script>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/assets/css/plugins.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="admin/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="admin/plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="admin/plugins/table/datatable/dt-global_style.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/elements/alert.css">
    <link href="admin/assets/css/elements/infobox.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body>
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        @include('admin.header')
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>


        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            @include('admin.navbar')

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div id="jumbotronBasic" class="col-xl-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area text-center">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="jumbotron">
                                          <h2 class="display-4 mb-5  mt-4">Döküman'a Hoşgeldiniz</h2>
                                          <p class="lead mt-3 mb-4">Mia Teknoloji'nin bizlere vermiş olduğu ABONELİK projesi için hazırlanmıştır.</p>
                                          <hr class="my-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-dark mb-4" role="alert">Tasarım için Bootstrap ile hazırlanmış hazır bir template kullanımıştır. Projenin genelinde LARAVEL kütüphanesi kullanılmıştır.</div>
                                <div class="alert alert-dark mb-4" role="alert"><iframe width="100%" height="315" src="https://www.youtube.com/embed/UcckauZ-ltM?si=5oNMxv1ECzvP8VBA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                                <div class="alert alert-primary mb-4" role="alert"><span style="color:red">Sol Tarafta bulunan menülerin görevleri</span> <br>
                                    <span style="color:red">All Users:</span> Bütün müşterileri listelemeye, abonelikleri ve abonelik durumları hakkında bilgiler verir <br>
                                    <span style="color:red">Failed Transactions:</span> İlk seferde ödemesi <strong>ALINAMAYAN</strong> üyeleri ve kaç kere çekim denemesi yapıldığı hakkında bilgi verir. <br>
                                    <span style="color:red">Logs:</span> Cronlar çalıştıkça abonelerden çekilmeye çalışan ücretin başarılı olup olmadığı hakkında ve aboneye gönderilen SMS ile ilgili bilgiler verir. <br>
                                    <span style="color:red">Document:</span> Sistem ile ilgili bilgilerin bulunduğu ve sistemin kullanılması ile ilgili bilgiler sunar.
                                </div>
                                <img style="width: 100%; height:400px" src="admin/img/akis.jpg">

                            </div>
                        </div>
                    </div>

                </div>

                <div id="infobox2" class="col-xl-12 col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area text-center">
                            <h3 class="mb-4">Sistemin Ana Çalışma Mantığı Ve Örneklendirme</h3>
                           <div class="row">
                            <div class="col-lg-12">
                                <div class="infobox-2">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    </div>
                                    <p class="info-text">Arka tarafta çalışan 2 cron mevcuttur. Bir corn her dakika aboneliği dolan üyenin olup olmadığını sorgular. Bu her dakika çalışan cron aboneliği dolan birisini bulduğunda ödeme işlemi için PayCellService dosyasına giderek kullanıcının kart bilgileri ile ödeme isteğinde bulunur. Bu isteğin sonucunda eğer ödeme başarılı ise abonenin aylık periyodu devam edecek şekilde tarihler güncellenir. Fakat ödeme işlemi başarısız ise bu üye FailedTransactions adlı tabloya taşınır ve bu saatten sonra iş diğer cronundur.</p>
                                    <p class="info-text">2. cronun görevi ise her gün 1 kere çalışmak üzere tasarlanmıştır. Bu cron FailedTransactions adlı tabloya giderek orda bulunan ve deneme sayıları henüz 3 e ulaşmamış aboneleri bularak onları tekrar ödeme işlemine yönlendirmektir. Eğer bu ödeme metodundan başarılı bir şekilde sonuç alınırsa üyenin periyodu devam ettirilir. Fakat başarısız olursa son olarak ertesi gün tekrar denenir. Eğer son denemede de sonuç başarılıysa önceki durumlar gibi periyot devam eder, fakat başarısız olursa bu kez hem üyenin durumu pasife çekilir hem de SMS gönderme metodu olan SendSms metoduna giderek kullanıcının hesabının pasif olduğunu kullanıcıya bildirir.</p>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>

                <div id="infobox2" class="col-xl-12 col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area text-center">
                            <h3 class="mb-4">Önemli Rol Oynayan Dosyalar</h3>
                           <div class="row">
                            <div class="col-lg-6">
                                <div class="infobox-2">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    </div>
                                    <h5 class="info-heading">app\Helpers\SaveLog.php</h5>
                                    <p class="info-text">Her cron çalıştığında ve sms ile bilgilendirme yapıldığında loglama yaparak veri tabanına bilgiyi kaydeden dosyadır.</p>
                                    <img style="width:100%; height:auto; border-radius:20px" src="admin/img/savelog.jpg">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="infobox-2">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    </div>
                                    <h5 class="info-heading">app\Helpers\SendSms.php</h5>
                                    <p class="info-text">Bir abonenin ödeme işlemi başarıyla tamamlanamazsa aboneye SMS entegrasyonu kullanılarak mesaj gönderen dosyadır.</p>
                                    <img style="width:100%; height:auto; border-radius:20px" src="admin/img/sendsms.jpg">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="infobox-2">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    </div>
                                    <h5 class="info-heading">app\Http\crons\CheckMinute.php</h5>
                                    <p class="info-text">Her dakika düzenli çalışan cron dur. Abonelik süresi dolan müşterileri tespit eder ve ilk ödeme işlemini yaptırır eğer ödeme işlemi başarısız olursa FailedUsers tablosuna kaydeder.</p>
                                    <img style="width:100%; height:auto; border-radius:20px" src="admin/img/checkminute.jpg">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="infobox-2">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    </div>
                                    <h5 class="info-heading">app\Http\crons\CheckFailedUsers.php</h5>
                                    <p class="info-text">FailedUsers adlı tabloya kaydolan aboneleri günde 1 kere tekrar ödeme yapmasını sağlayan cron dur. Eğer toplamda 3 kere denendiyse kullanıcıya sms gitmesini sağlar.</p>
                                    <img style="width:100%; height:auto; border-radius:20px" src="admin/img/checkfailedusers.jpg">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="infobox-2">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    </div>
                                    <h5 class="info-heading">app\Services\PayCellService.php</h5>
                                    <p class="info-text">PayCell entegrasyonu gibi davranarak %20 ihtimalle başarısız, %80 ihtimalle başarılı ödeme sonucu döndürür böylelikle senaryoyu gerçek hayata benzetir.</p>
                                    <img style="width:100%; height:auto; border-radius:20px" src="admin/img/paycell.jpg">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="infobox-2">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    </div>
                                    <h5 class="info-heading">Gelen SMS</h5>
                                    <p class="info-text">Ankara Toplu Sms Entegrasyonu kullanılarak SMS gönderme işlemi yapıldı Gerçek hesap kullanılarak yapılan bir işlemdir.</p>
                                    <img style="width:100%; height:auto; border-radius:20px" src="admin/img/ss.jpg">
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
                <div id="infobox2" class="col-xl-12 col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area text-center">
                            <h3 class="mb-4">Döküman Yazıldıktan Sonra Değiştirilen Yerler</h3>
                           <div class="row">
                            <div class="col-lg-12">
                                <div class="infobox-2">
                                    <div class="info-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                    </div>
                                    <p class="info-text">Eğer bir abone FailedTransaction tablosuna düştüyse 2 gün daha süresi oluyordu fakat dakikalık çalışan corunumuz her çalıştığında bu kullanıcıyı tekrardan FailedTransactions tablosuna yazdığı için kullanıcıya birçok kez sms gidecekti bunun önüne geçildi eğer müşteri zaten TransActions tablosundaysa tekrardan o kullanıcının işlemi bitene kadar yazılmıyor.</p>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2024 <b style="color: red">İLİM DENİZ TOPRAK</b> tarafından geliştirilmiştir.</p>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="admin/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="admin/bootstrap/js/popper.min.js"></script>
    <script src="admin/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="admin/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="admin/assets/js/custom.js"></script>

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/starter_kit_breadcrumbs.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Mar 2021 13:47:28 GMT -->
</html>
