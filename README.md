# Mia Teknoloji Abonelik Sistemi

Bu proje, Mia Teknoloji'nin abonelik sistemini kurmak için kullanılan bir uygulamayı içermektedir.

## Kurulum Aşamaları

1. **Projeyi İndirme:**
   Boş bir klasör oluşturun ve terminalinizde aşağıdaki komutu kullanarak projeyi bilgisayarınıza kopyalayın:

   ```bash
   git clone https://github.com/IlimDenizToprak/Payment.git
   ```

2. **Composer Kurulumu:**
   Proje klasörüne
   
   ```bash
   cd /Payment
   ```

   komutu ile gidin ve terminalinize aşağıdaki komutu yazarak gerekli Composer paketlerini kurun:

   ```bash
   composer install
   ```

   Not: Eğer bu adımı tamamladıktan sonra "vendor" klasörünü göremiyorsanız, projenin düzgün çalışmayacağını unutmayın.

3. **Veritabanı Oluşturma:**
   ".env" dosyasındaki veritabanı bilgileri ile local sunucunuzda bir veritabanı oluşturun. Örnek veritabanı bilgileri:

   - Veritabanı Adı: `payment`
   - Kullanıcı Adı: `root`
   - Şifre: `YOK`

4. **Tabloları Oluşturma:**
   Terminalinize aşağıdaki komutu yazarak oluşturduğunuz veritabanındaki tabloları kurun:

   ```bash
   php artisan migrate
   ```

5. **Fake Veri Yükleme:**
   Proje içindeki örnek verileri yüklemek için aşağıdaki komutu kullanın:

   ```bash
   php artisan db:seed
   ```

   Bu adımdan sonra "User" tablosunda 4 adet kullanıcı yüklenmiş olmalıdır.

6. **Abonelikleri Test Etme:**
   Kullanıcılardan herhangi birinin "start date" ve "end date" bilgilerini günümüz tarihi ile değiştirin ve dökümantasyonda belirtilen cronları doğru saatlerde çalıştırarak aboneliklerin otomatik olarak ilerlediğini veya hesapların pasif hale geldiğini gözlemleyin.

---

Bu adımları takip ettikten sonra, Mia Teknoloji Abonelik Sistemi başarıyla kurulmuş olacaktır. Daha fazla bilgi için dökümantasyonu kontrol edebilirsiniz.
