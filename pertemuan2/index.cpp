#include <iostream>
using namespace std;

int penjumlahan (int a, int b){
        return a + b;
    } 

int perkalian (int a, int b){
        return a * b;
    } 

int pembagian (int a, int b){
        return a / b;
    } 

int pengurangan (int a, int b){
        return a - b;
    } 

int main(){
    int angkaPertama, angkaKedua, pilihanOperasiPerhitungan, hasil;
    
    //program kalkulator sederhana
    cout << "Masukkan angka pertama: ";
    cin >> angkaPertama;
    cout << "Masukkan angka kedua: ";
    cin >> angkaKedua;
    cout << "Operasi Perhitungan" << endl;
    cout << "1. Penjumlahan" << endl;
    cout << "2. Pengurangan" << endl;
    cout << "3. Pembagian" << endl;
    cout << "4. Perkalian" << endl;
    cout << "Pilih operasi perhitungan 1/2/3/4: ";
    cin >> pilihanOperasiPerhitungan;
    // if (pilihanOperasiPerhitungan == 1){
    //     hasil = penjumlahan(angkaPertama, angkaKedua);
    // } else if(pilihanOperasiPerhitungan == 2){
    //     hasil = pengurangan(angkaPertama, angkaKedua);
    // } else if(pilihanOperasiPerhitungan == 3){
    //     hasil = pembagian(angkaPertama, angkaKedua);
    // } else if(pilihanOperasiPerhitungan == 4){
    //     hasil = perkalian(angkaPertama, angkaKedua);
    // } else {
    //     hasil = 0;
    // }

    pilihanOperasiPerhitungan = pilihanOperasiPerhitungan == 1 ? hasil = penjumlahan(angkaPertama, angkaKedua):
    pilihanOperasiPerhitungan == 2 ? hasil = pengurangan(angkaPertama, angkaKedua):
    pilihanOperasiPerhitungan == 3 ? hasil = pembagian(angkaPertama, angkaKedua):
    pilihanOperasiPerhitungan == 4 ? hasil = perkalian(angkaPertama, angkaKedua): hasil = 0;

    if (hasil == 0){
        cout << "kesalahan pada input operasi perhitungan.." << endl;
    } else {
        cout << "Angka Pertama: " << angkaPertama << endl;
        cout << "Angka Kedua: " << angkaKedua << endl;
        cout << "Hasil: " << hasil; 
    }

}