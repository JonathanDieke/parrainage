<div class="mx-auto">

     {{-- <div class=" block">
        <input class="form-control" type="text" placeholder="Saisissez votre matricule" wire:model="q" aria-label="default input example">
    </div> <br> --}}

    <ul class="nav nav-tabs" id="tabList" role="tablist">
        <li class="nav-item" role="presentation">
          <button  class="nav-link  {{ $activeClass ?"active" : "" }}" id="godfathers-tab" data-bs-toggle="tab" data-bs-target="#godfathers" type="button" role="tab" aria-selected="true">
            Parrains <i class="fab fa-jedi-order"></i>
        </button>
        </li>
        <li class="nav-item" role="presentation">
          <button  class="nav-link {{ $activeClass ? '' : "active" }}" id="godchrildren-tab" data-bs-toggle="tab" data-bs-target="#godchrildren" type="button" role="tab" aria-selected="false">
            Filleuls <i class="fab fa-first-order"></i>
        </button>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent">
          
        <div class="tab-pane fade {{ $activeClass ? " show active" : "" }}" id="godfathers" role="tabpanel" aria-labelledby="godfathers-tab">
            <table class="table table-hover table-striped caption-top">
                <caption>Liste des parrains</caption>
                <thead>
                  <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col">Parrains</th>
                    <th scope="col">Filleuls</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($godfathers as $godfather)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $godfather->name }} {{ $godfather->lname }}</td>
                                <td>
                                    @foreach ($godfather->godchildren as $godchild)
                                        @if (! $loop->first)
                                            /
                                        @endif
                                        {{ $godchild->name }} {{ $godchild->lname }}
                                    @endforeach
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="tab-pane fade {{ $activeClass ? "" : "show active" }}" id="godchrildren" role="tabpanel" aria-labelledby="godchrildren-tab">
            <table class="table table-hover table-striped caption-top">
                <caption>Liste des filleuls</caption>
                <thead>
                  <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col">Filleuls</th>
                    <th scope="col">Parrains</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($godchildren as $godchild)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $godchild->name }} {{ $godchild->lname }}</td>
                            <td>
                                {{ $godchild->godfather->name }} {{ $godchild->godfather->lname }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>

</div>
