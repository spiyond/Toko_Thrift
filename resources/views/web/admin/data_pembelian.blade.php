public function adminPage()
    {
        $pembelian = Data_Pembelian::readData_PembelianAll();
        $pakaian = Data_Pakaian::readData_PakaianAll();
        $user = Data_User::readData_UserAll();
        return view("web.data.admin", [
            "data_pembelian" => $pembelian,
            "data_pakaian" => $pakaian,
            "data_user" => $user,
        ]);
    }