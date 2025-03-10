<x-main-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <p class="text-center display-3">Laboratório de Filesystem</p>
                <hr>
                <div class="d-flex gap-5">
                    <a href="{{ route('storage.local.create') }}" class="btn btn-primary">
                        Criar arquivo no storage local
                    </a>
                    <a href="{{ route('storage.local.append') }}" class="btn btn-primary">
                        Adicionar conteúdo no storage local
                    </a>
                    <a href="{{ route('storage.local.read') }}" class="btn btn-primary">
                        Ler conteúdo do storage local
                    </a>
                    <a href="{{ route('storage.local.read.multi') }}" class="btn btn-primary">
                        Ler multiplo conteúdo do storage local
                    </a>
                </div>
                <div class="d-flex gap-5 mt-5">
                    <a href="{{ route('storage.local.check.file') }}" class="btn btn-primary">
                        Verificar arquino no storage local
                    </a>
                    <a href="{{ route('storage.local.create.json') }}" class="btn btn-primary">
                        Criar arquino JSON no storage local
                    </a>
                    <a href="{{ route('storage.local.read.json') }}" class="btn btn-primary">
                        Ler arquino JSON no storage local
                    </a>
                    <a href="{{ route('storage.local.delete.files') }}" class="btn btn-primary">
                        Deletar arquivos do storage local
                    </a>
                </div>
                <div class="d-flex gap-5 mt-5">
                    <a href="{{ route('storage.local.create.folder') }}" class="btn btn-primary">
                        Criar pasta no storage local
                    </a>
                    <a href="{{ route('storage.local.delete.folder') }}" class="btn btn-primary">
                        Deletar pasta do storage local
                    </a>
                    <a href="{{ route('storage.local.metadata.files') }}" class="btn btn-primary">
                        Mostrar metadatas dos arquivos
                    </a>
                    <a href="{{ route('storage.local.list.files.download') }}" class="btn btn-primary">
                        Mostrar arquivos para download
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
