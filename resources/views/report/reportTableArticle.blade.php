<h1>Reporte de Articulos</h1>
<table class="table table-striped table-hover">
    <thead class="thead-dark bg-primary">
    <tr>
        <th>Id</th>
        <th>Enviado por</th>
        <th>descripion</th>
        <th>Demandante</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($reportArticle as $report)

        @if($report->accepted === null)
            <tr>
        @elseif($report->accepted)
            <tr class="table-danger">
        @else
            <tr class="table-primary">
                @endif
                <td>{{$report->id}}</td>
                <td>{{$report->article->user->name}}</td>
                <td>{{$report->description}}</td>
                <td>{{$report}}</td>

                <td>
                    <a href="{{route('reportMessage.rejected',$report)}}"><i class="bi bi-hand-thumbs-down"></i></a>
                    <a href="{{route('reportMessage.accepted',$report)}}"><i class="bi bi-hand-thumbs-up"></i></a>
                    <form id="deleteUser" action="{{ route('reportMessage.destroy', $report) }}" method="POST" class="d-inline-block">
                        @method('DELETE')
                        @csrf
                        <button  class="bi bi-trash" aria-hidden="true"></button>
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
