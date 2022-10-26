<html>
    <head>
</head>
<body>
    <h1>Form tambah</h1>
    <form action="proses_tambah.php" method="POST">
            <fieldset>
                <p>
                    <label for="nik">Nik :</label>
                    <input type="number" name="nik" />
                </p>
                 
                 <p>
                    <label for="jeniskendaraan">Jenis kendaraan :</label>
                    <SELECT name="jeniskendaraan">
                    <option value="montor">Montor </option>
                    <option value="mobil">Mobil </option> 
                    <option value="truk">Truk </option> 
                    <option value="bis">Bis </option> 
                    <option value="tossa">Tossa </option>  
</select></br>
                </p>

                <p>
                    <input type="submit" value="kirim data" name="tambah_data" />
                </p>
            </fieldset>
        </form>
</body>
</html>
