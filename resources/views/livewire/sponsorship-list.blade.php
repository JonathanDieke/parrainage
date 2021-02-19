<div class="mx-auto">

    {{--  <div class="float-sm-start block">
        <input type="search" name="q" id="search" class="form-control">
    </div>  --}}

    <div class="btn-group float-end float-md-start mt-4" role="group">
        <button type="button" class="btn btn-outline-secondary" wire:click="changeList">Parrains</button>
        <button type="button" class="btn btn-outline-info" wire:click="changeList">Filleuls</button>
    </div>

    <table class="table table-hover table-striped caption-top">
        <caption>Liste des parrains</caption>
        <thead>
          <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">Parrains</th>
            <th scope="col">Filleuls</th>
          </tr> {{ $parrains }}
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->name }} {{ $item->lname }}</td>
                    @if($parrains)
                        <td>
                            @foreach ($item->godchildren as $godchild)
                                @if (! $loop->first)
                                    /
                                @endif
                                {{ $godchild->name }} {{ $godchild->lname }}
                            @endforeach
                        </td>
                    @else
                        <td>
                            {{ $item->godfather->name }} {{ $item->godfather->lname }}
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
      </table>

</div>
