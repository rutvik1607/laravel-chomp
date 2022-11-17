@props(['label', 'data', 'tableId', 'unsetFields', 'action'])

<div class="table-responsive">
    <table class="table" id="{{ $tableId }}">
        {{-- Label in List --}}
        <thead>
            @foreach ($label as $items)
                <th class="text-uppercase">{{ $items }}</th>
            @endforeach
        </thead>

        {{-- unset fields in List --}}
        @if (!empty($unsetFields))
            @foreach ($data as $key => $item)
                @foreach ($item as $key1 => $val)
                    @foreach ($unsetFields as $key2 => $field)
                        @if ($field == $key1)
                            <?php unset($data[$key][$field]); ?>
                        @endif
                    @endforeach
                @endforeach
            @endforeach
        @endif

        {{-- Action in List --}}
        @if (!empty($action))
            @foreach ($data as $key => $item)
                @foreach ($item as $key1 => $val)
                    <?php $data[$key]['actions'] = $action; ?>
                @endforeach
            @endforeach
        @endif


        {{-- data in List --}}
        <tbody>
            @foreach ($data as $key => $item)
                <tr>
                    @foreach ($item as $key1 => $val)
                        @if ($key1 == 'actions')
                            <td>
                                @foreach ($val as $keys => $items)
                                    @if ($keys == 'delete')
                                        <a href="{{ Route($items, $item['id']) }}" onclick="confirm('are you sure ?');"><i
                                                class="fas fa-trash-alt"></i>&nbsp;</a>
                                    @elseif ($keys == 'edit')
                                        <a href="{{ Route($items, $item['id']) }}"><i class="fas fa-edit"></i>&nbsp;</a>
                                    @elseif ($keys == 'view')
                                        <a href="{{ Route($items, $item['id']) }}"><i class="fas fa-eye"></i>&nbsp;</a>
                                    @elseif ($keys == 'pdf')
                                        <a href="{{ Route($items, $item['id']) }}"><i
                                                class="fas fa-file-pdf"></i>&nbsp;</a>
                                    @elseif ($keys == 'url')
                                        <a href="{{ Route($items, $item['name']) }}" target="_blank"><i
                                                class="fas fa-link"></i></a>
                                    @elseif ($keys == 'users')
                                        <a href="{{ Route($items, $item['id']) }}"><i
                                                class="fas fa-users-medical"></i>&nbsp;</a>
                                    @endif
                                @endforeach
                            </td>
                        @else
                            <td> {{ $val }}</td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
