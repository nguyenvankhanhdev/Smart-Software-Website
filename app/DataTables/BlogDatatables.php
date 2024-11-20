<?php

namespace App\DataTables;

use App\Models\BlogDatatable;
use App\Models\BlogTour;
use App\Models\BlogTours;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BlogDatatables extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('action', function ($query) {
                $editBtn = "<a href='" . route('admin.blog.edit', $query->id) . "' class='btn btn-primary'><i class='far fa-edit'></i></a>";
                $deleteBtn = "<a href='" . route('admin.blog.destroy', $query->id) . "' class='btn btn-danger ml-2 delete-item' data-id='{ $query->id }'><i class='far fa-trash-alt'></i></a>";
                return $editBtn . $deleteBtn;
            })
            ->addColumn('image', function ($query) {
                return "<img width='100px' height='80px' src='" . asset($query->image) . "' >";
            })
            ->addColumn('status', function ($query) {
                $checked = $query->status == 1 ? 'checked' : '';
                return '<label class="custom-switch mt-2">
                <input type="checkbox" ' . $checked . ' name="custom-switch-checkbox" data-id="' . $query->id . '" class="custom-switch-input change-status">
                <span class="custom-switch-indicator"></span>
            </label>';
            })
            ->addColumn('blogtype', function ($query) {
                return $query->blogtypes->name;
            })
            ->addColumn('nhanvien',function($query)
            {
                return $query->nhanvien->hoten ;
            })
            ->addColumn('ngaytao', function ($query) {
                return date('d-m-Y', strtotime($query->created_at));
            })
            ->addColumn('ngaycapnhat', function ($query) {
                return date('d-m-Y', strtotime($query->updated_at));
            })
            ->rawColumns(['status', 'blogtype', 'action', 'image'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(BlogTours $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('blogdatatables-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('DT_RowIndex')
                ->title('STT')
                ->exportable(false)
                ->printable(false)
                ->width(30)
                ->addClass('text-center'),
            Column::make('image')->title('Hình ảnh'),
            Column::make('title')->title('Tiêu đề'),
            Column::make('status')->title('Trạng thái'),
            Column::make('blogtype')->title('Loại blog'),
            Column::make('ngaytao')->title('Ngày tạo'),
            Column::make('ngaycapnhat')->title('Ngày cập nhật'),
            Column::make('nhanvien')->title('Nhân viên'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(150)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'BlogDatatables_' . date('YmdHis');
    }
}
