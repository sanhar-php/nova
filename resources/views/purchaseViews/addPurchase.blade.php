<script>
    $(function() {
        $('.selectpicker').selectpicker({
            style: 'btn-primary btn-sm',
            size: 6
        });
        $( "#datepicker" ).datepicker({
            dateFormat: 'yy-mm-dd',
            yearRange: '1920:2050',
            changeMonth: true,
            changeYear: true,
            currentText: 'Сегодня',
            monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
                'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
            monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
                'Июл','Авг','Сен','Окт','Ноя','Дек'],
            dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
            dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
            dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб']
        });
        $( "#datepicker1" ).datepicker({
            dateFormat: 'yy-mm-dd',
            yearRange: '1920:2050',
            changeMonth: true,
            changeYear: true,
            currentText: 'Сегодня',
            monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
                'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
            monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
                'Июл','Авг','Сен','Окт','Ноя','Дек'],
            dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
            dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
            dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб']
        });


    });

</script>
<form id="data-edit" class="form-horizontal" role="form" method="post" action="/purchase/add/{{$id}}">

    <div class="form-group">

        <div class="col-sm-4">
            <input type="text" class="form-control  input-sm"
                   id="inputEmail3" placeholder="Номер торгов" name="purchaseName" autofocus/>
        </div>

    </div>
    <div class="form-group">

        <div class="col-sm-2 ">
            <select name="purchaseStatus" class="selectpicker">
                @foreach($p_status as $a)

                        <option value="{{$a->psId}}">{{$a->psName}}</option>


                @endforeach





            </select>
        </div>

    </div>
    <div class="form-group">

        <div class="col-sm-2 ">
            <select name="purchaseContact" class="selectpicker">

                @foreach($contacts as $a)

                    <option value="{{$a->IDContact}}">{{$a->FamilyContact}} {{$a->NameContact}} {{$a->SoNameContact}}</option>


                @endforeach




            </select>
        </div>

    </div>
    <div class="form-group">
        <div class="col-sm-4">
            <input type="text" class="form-control  input-sm"
                   id="datepicker" placeholder="Дата начала" name="purchaseDateStart" />
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control  input-sm"
                   id="datepicker1" placeholder="Дата окончания" name="purchaseDateEnd" />
        </div>

    </div>
    <div class="form-group">

        <div class="col-sm-10">
            <textarea class="form-control" placeholder="Ссылка"  name="purchaseLink"  rows="3"></textarea>

        </div>

    </div>

    <div class="form-group">

        <div class="col-sm-10">
            <textarea class="form-control" placeholder="Дополнительно"  name="purchaseNote"  rows="3"></textarea>

        </div>

    </div>








    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="BillContragentId" value="{{ $id }}">

</form>


