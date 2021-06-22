<?php

class database
{

    function connect()
    {
        return mysqli_connect("localhost", "root", "mafud123", "sistem_reservasi");
    }

    function tampil_data()
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM pengunjung";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';

        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    function tampil_data_users()
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM user";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';

        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    function edit_pengunjung($id)
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM pengunjung where id = $id";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';
        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            // print_r($hasil);exit;
            return $hasil;
        }
    }
    function edit_user($id)
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM user where id = $id";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';
        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            // print_r($hasil);exit;
            return $hasil;
        }
    }
}
