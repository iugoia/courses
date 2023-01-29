<div>

    <input type="text" placeholder="Курс, школа.." wire:model="searchTerm" class="form-control search-form mb-5">
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
                                <th>Название</th>
                                <th>Цена</th>
                                <th>РЦК</th>
                                <th>Школа</th>
                                <th>Ссылка</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{$course->id}}</td>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->price}}</td>
                                    <td>{{$course->rck}}</td>
                                    <td>{{$course->school}}</td>
                                    <td>
                                        <a href="{{$course->link}}" target="_blank">Ссылка на курс</a>
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
