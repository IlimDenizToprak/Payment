<h3>-Mia Teknoloji Abonelik Sistemi Kurulum Aşamaları-</h3>
<p>1-Boş bir klasör açın ve editörünüz ile bu klasöre giriş yapın</p>
<p>2-Editörün terminalini açın ve "git clone https://github.com/IlimDenizToprak/Payment.git ." komutunu çalıştırarak projeyi bilgisayarınıza kopyalayın.</p>
<p>3-Proje kurulduktan sonra composer install yaparak "vendor" dosyasını kurun, eğer bu adımı yaptığınızda "vendor" klasörünü göremiyorsanız proje düzgün çalışmayacaktır</p>
<p>4-Veri tabanını kurmak için ".env" adlı dosyadaki veritabanı bilgileri ile local sunucuda bir veritabanı oluşturun vt adı: payment k.adı: root şifre: YOK</p>
<p>5-Veritabanı oluştuktan sonra tabloları kurmak için "php artisan migrate" komutunu çalıştırın ve bu oluşturduğunuz veritabanının içerisinde tabloları oluşturun</p>
<p>6-Sizler için oluşturduğum fake dataları yüklemek için "php artisan db:seed" komutunu çalıştırın ve fake dataların ilgili tablolara(user,card_infoes) işlendiğinden emin olun. User tablosunda 4 adet kullanıcı yüklemiş olmalısınız.</p>
<p>7-Kullanıcılardan herhangi birinin start date ve end datesini günümüz tarihi ile değiştirdiğinizde ve döküman içerisinde yer alan cronları doğru saatlerde çalıştırdığınızda aboneliklerin otomatik bir şekilde, periyoduna uygun bir şekilde ilerlediğini veya hesabın pasif olarak güncellendiğini görebilirsiniz.</p>
