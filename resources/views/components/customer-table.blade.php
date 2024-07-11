<table class="table align-middle table-row-dashed fs-6 gy-5 custom-table admin-table" id="kt_customers_table">
    <thead>
        <tr class="text-start text-gray-500 mb-none fw-bold fs-7 text-uppercase gs-0">
            <th scope="col" class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input
                        class="form-check-input"
                        style="border: 1px solid white; margin-left: 12px;"
                        type="checkbox"
                        data-kt-check="true"
                        data-kt-check-target="#kt_customers_table .form-check-input"
                        value="1"
                    />
                </div>
            </th>
            <th scope="col" class="mb-none admin-table">{{ $titleColumnName }}</th>
            <th scope="col" class="admin-table">Instructions File</th>
            <th scope="col" class="admin-table">Video URL</th>
            <th scope="col" class="admin-table">Action</th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600" id="myTable">
        @foreach ($data as $item)
        <tr class="card-body border-top">
            <td data-label="Select" class="mb-none" data-label="Select">
                <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input checkbox" type="checkbox" value="{{$item->id}}" />
                </div>
            </td>


            <td data-label="Name" class="mb-none">{{ $item->title }}</td>
            <td data-label="Parking Space">{{ $item->file_name }} <a href="{{url('download-file/'.$item->file_type)}}"><i class="ki-outline ki-exit-down fs-2x ms-n1 text-gray-500 admin-icon"></i></a></td>
            <td data-label="Type">{{ $item->video_link }} </td>
            <td data-label="Status" class="text-success">
                <div class="action-icon">
                    <div class="d-flex  align-items-center">
                        <!--begin::Button-->
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px me-5" onclick="{{ $editFunction }}({{ $item->id }}, '{{ $item->title }}', '{{ $item->video_link }}', '{{ $item->file_name }}', '{{ $item->file_type }}')" data-bs-toggle="modal" data-bs-target="#{{ $editModalId }}">
                            <i class="ki-outline ki-pencil fs-3"></i>
                        </button>
                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px" onclick="{{ $deleteFunction }}({{ $item->id }})" data-bs-toggle="modal" data-bs-target="#{{ $deleteModalId }}">
                            <i class="ki-outline ki-trash fs-3"></i>
                        </button>
                        <!--end::Button-->
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>