# SQL BAĞLAMA (PHP)

- $baglanti = new mysqli("host", "username", "password", "dbname", port, "socket");
#
- host: MySQL sunucu adresini belirtir (genellikle localhost),

- username: MySQL kullanıcı adını belirtir (genellikle root),

- password: MySQL kullanıcısının şifresini belirtir (genellikle yoktur veya 123456),

- dbname: MySQL veritabanını belirtir,

- port: MySQL port numarasını belirtir (pek kullanılmaz varsayılan 3306),

- socket: Linux sistemler için socket yolunu belirtir (pek kullanılmaz).

- Parametreler MySQL sunucu yapılandırmasına göre düzenlenerek bağlantı sağlanır.

# SQL VERİ ÇEKME

- SELECT sutun1, sutun2,sutunN FROM tablo_adi
#### Tablodaki tüm sütunları seçmek için sütun yerine sadece yıldız (*) karakterinin eklenmesi yeterli olacaktır.


## Veri çekme işlemi için query veya prepare metodunu kullanabiliriz.

Dışarıdan değer almayan veri çekme işlemi için query metodunu kullanabiliriz.

Veri çekme işlemine dışarıdan değer alarak koşullu veri çekme gibi bir işlem yapılacaksa prepare metodunun kullanılması faydalı olacaktır.

Dışarıdan alınan değerin güvenli olarak SQL komutuna eklenmesi için prepare ve bind_param metodu kullanılmıştır.

Güvenli bir SQL komutu oluşturulduktan sonra execute metodu ile SQL komutu çalıştırılmış ve get_results metodu ile sonuçlar elde edilmiştir.

Metot query metodunda olduğu gibi geri dönüş değeri olarak mysqli_result sınıfındaki metot ve özellikleri (num_rows, fetch_all, fetch_array, fetch_object, fetch_row vb.) verir.

Sorgu sonucunda ortaya çıkan veri sayısını öğrenmek için sınıfın içindeki num_rows özelliği kullanılabilir.
