<x-main-layout>
    <div class="container">
        <p class="display-6 mt-5">Ficheiros/Arquivos com MetaDados</p>
        <hr>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Tamanho</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                        <tr>
                            <td>{{ $file['name'] }}</td>
                            <td>{{ $file['size'] }}</td>
                            <td>
                                <a target="_blank" href="{{ $file['url_download'] }}" class="btn btn-primary">
                                    Download
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-main-layout>
