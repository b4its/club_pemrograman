#include <iostream>
#include <cmath>
using namespace std;

int main(){
    string cekLanjut;
    int r;
    double luasLingkaran, kelilingLingkaran;
    bool apakahLanjut = true;

    while(apakahLanjut){
        cout << "Masukkan jari jari lingkran: ";
        cin >> r;
        luasLingkaran = M_PI * pow(r, 2);
        kelilingLingkaran = 2 * M_PI * r;
        cout << "Luas Lingkaran: " << luasLingkaran << endl;
        cout << "Keliling Lingkaran: " << kelilingLingkaran << endl;
        cout << "Apakah anda ingin menghitung lagi?" << endl;
        cout << "iya/tidak: ";
        cin >> cekLanjut;
        apakahLanjut = (cekLanjut == "tidak") ? false : true;
    }
    cout << "terima kasih telah menggunakan program perhitungan lingkaran sederhana";
}