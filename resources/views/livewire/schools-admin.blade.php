<div>
    <style>
        .ctn--image{
            width: 50px;
            height: 50px;
        }
        .ctn--image img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <input type="text" placeholder="Название школы.." wire:model="searchTerm" class="form-control search-form mb-5">
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Логотип</th>
                                <th>Название</th>
                                <th>Ссылка</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($schools as $school)
                                <tr>
                                    <td class="col-1">{{$school->id}}</td>
                                    <td class="col-1">
                                        <div class="ctn--image">
                                            <img src="{{$school->image}}" alt="логотип {{$school->name}}">
                                        </div>
                                    </td>
                                    <td class="col-5">{{$school->name}}</td>
                                    <td class="col-2">
                                        <a href="{{$school->link}}">Ссылка на школу</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="paginator-center">
        {{$paginator->onEachSide(1)->links()}}
    </div>
</div>
