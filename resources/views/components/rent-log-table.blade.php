<div>
    {{-- ini component rent-log --}}
    <table class="table text-center">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Tanggal Pasti Kembali</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($rentlog as $item)
          <tr class="{{ $item->actual_return_date == null ? '' : ($item->return_date < $item->actual_return_date ? 'bg-danger text-white' : 'bg-success text-white') }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->username }}</td>
                <td>{{ $item->book->title }}</td>
                <td>{{ $item->rent_date }}</td>
                <td>{{ $item->return_date }}</td>
                <td>{{ $item->actual_return_date }}</td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>