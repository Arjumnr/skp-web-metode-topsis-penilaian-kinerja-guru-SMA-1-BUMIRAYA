@push('scripts')
    <script>
        $(document).ready(function() {
        $('#example').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('guru') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'nip',
                    name: 'nip'
                },
                {
                    data: 'nama_guru',
                    name: 'nama_guru'
                },
                {
                    data: 'jenis_kelamin',
                    name: 'jenis_kelamin'
                },
                {
                    data: 'no_telp',
                    name: 'no_telp'
                },
                {
                    data: 'foto',
                    name: 'foto'
                },


                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });






        });
    </script>
@endpush
