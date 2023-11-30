<h1>Profile</h1>
<hr>
<table border='0'>
    @if ($nama == 'yaya')
        <tr>
            <td>Nama: {{ $nama }}</td>
        </tr>
    @endif
</table>
</hr>

<h1>Contoh pengulangan</h1>
<table>
    @foreach($data_array as $data)
        <tr>
            <td>Nama</td>
            <td>{{ is_array($data) ? implode(', ', $data) : htmlspecialchars($data) }}</td>
        </tr>
    @endforeach
</table>

<!-- Example usage in Blade view -->
<h1>Profile</h1>
<p>Nama: {{ $nama }}</p>
<p>Alamat: {{ $alamat }}</p>
<p>Tanggal Lahir: {{ $tanggal_lahir }}</p>

<h2>Data Nama</h2>
<ul>
    @foreach($data_array['nama'] as $name)
        <li>{{ $name }}</li>
    @endforeach
</ul>

@for ($i = 0; $i < 5; $i++)
    {{ $i }}
@endfor

@forelse ($data_array['nama'] as $data)
    {{ $data }}
@empty
    No data available
@endforelse
