<h2>Daftar Ramuan Alkimia</h2>
<table>
    <tr>
        <th>Ramuan Alkimia</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td>Healing Potion Merah</td>
        <td>Rp15.000</td>
    </tr>
    <tr>
        <td>Mana Elixir Biru</td>
        <td>Rp18.000</td>
    </tr>
    <tr>
        <td>Stamina Draught Hijau</td>
        <td>Rp22.000</td>
    </tr>
    <tr>
        <td>Invisibility Potion Ungu</td>
        <td>Rp35.000</td>
    </tr>
    <tr>
        <td>Dragon Breath Tonic Emas</td>
        <td>Rp50.000</td>
    </tr>
</table>

<h2>Form Pemesanan</h2>
<form action="proses.php" method="POST">
    Nama: <input type="text" name="nama" required><br><br>
    Ramuan Alkimia: <select name="menu" required>
        <option value="">Pilih Ramuan</option>
        <option value="Healing Potion Merah">Healing Potion Merah</option>
        <option value="Mana Elixir Biru">Mana Elixir Biru</option>
        <option value="Stamina Draught Hijau">Stamina Draught Hijau</option>
        <option value="Invisibility Potion Ungu">Invisibility Potion Ungu</option>
        <option value="Dragon Breath Tonic Emas">Dragon Breath Tonic Emas</option>
    </select><br><br>
    Jumlah: <input type="number" name="jumlah" required><br><br>
    Kategori Pelanggan: <select name="kategori" required>
        <option value="">Pilih Kategori</option>
        <option value="Traveler Biasa">Traveler Biasa</option>
        <option value="Adventurer Guild">Adventurer Guild</option>
    </select><br><br>

    <input type="submit" value="Pesan">
</form>
