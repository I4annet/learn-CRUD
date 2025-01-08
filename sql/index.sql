CREATE PROCEDURE tambahMahasiswa 
   @nim VARCHAR(10),
   @nama VARCHAR(30),
   @kelas VARCHAR(10),
   @jurusan VARCHAR(20),
   @prodi VARCHAR(30)
   AS
BEGIN 
    INSERT INTO mahasiswa (nim, nama, kelas, jurusan, prodi) VALUES 
    (@nim, @nama, @kelas, @jurusan, @prodi);
END;