<?php

namespace App\DataTables;

use App\Model\Manufacture;
use Yajra\DataTables\Services\DataTable;

class ManufactureDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('edit', 'admin.manufactures.btn.edit')
            ->addColumn('delete', 'admin.manufactures.btn.delete')
            ->addColumn('checkbox', 'admin.manufactures.btn.checkbox')
            ->rawColumns([
                'edit', 'delete', 'checkbox'
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\ManufactureDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Manufacture::query();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('manufacturedatatable-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Blfrtip')
            ->orderBy(1)
            ->parameters([
                'lengthMenu' => [[10, 25, 50, 100], [10, 25, 50, 'All Records']],
                'buttons' => [
                    ['extend' => 'print', 'className' => 'btn btn-danger mb-3', 'text' => trans('admin.print')],
                    ['extend' => 'csv', 'className' => 'btn btn-info mb-3', 'text' => trans('admin.ex.csv')],
                    ['extend' => 'excel', 'className' => 'btn btn-success mb-3', 'text' => trans('admin.ex.excel')],
                    [
                        'className' => 'btn btn-primary mb-3',
                        'text' => trans('admin.create_manufacture'),
                        'action' => "function(){ window.location.href = '" . url()->current() . "/create'; }"
                    ],
                    ['className' => 'btn btn-danger mb-3 delBtn', 'text' => trans('admin.delete_all')],
                    ['extend' => 'reload', 'className' => 'btn btn-default mb-3 ', 'text' => trans('admin.refresh')],

                ],
                'initComplete' => 'function () {
                    this.api().columns([1,2,3,4]).every(function () {
                        var column = this;
                        var input = document.createElement("input");
                        $(input).appendTo($(column.footer()).empty())
                        .on(\'keyup\', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });
                    });
                }',
                'language' => datatable_lang()
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [

            [
                'name' => 'checkbox',
                'data' => 'checkbox',
                'title' => '<input type="checkbox" class="check_all" onClick="check_all()">',
                'exportable' => false,
                'printable' => false,
                'orderable' => false,
                'searchable' => false,
            ],
            [
                'name' => 'name_ar',
                'data' => 'name_ar',
                'title' => trans('admin.name_ar'),
            ],
            [
                'name' => 'name_en',
                'data' => 'name_en',
                'title' => trans('admin.name_en'),
            ], [
                'name' => 'moble',
                'data' => 'mobile',
                'title' => trans('admin.mobile'),
            ], [
                'name' => 'contact_name',
                'data' => 'contact_name',
                'title' => trans('admin.contact_name'),
            ],
            [
                'name' => 'created_at',
                'data' => 'created_at',
                'title' => trans('admin.created_at'),

            ],
            [
                'name' => 'updated_at',
                'data' => 'updated_at',
                'title' => trans('admin.updated_at')
            ],
            [
                'name' => 'edit',
                'data' => 'edit',
                'title' => trans('admin.edit'),
                'exportable' => false,
                'printable' => false,
                'orderable' => false,
                'searchable' => false,
            ],
            [
                'name' => 'delete',
                'data' => 'delete',
                'title' => trans('admin.delete'),
                'exportable' => false,
                'printable' => false,
                'orderable' => false,
                'searchable' => false,
            ],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'manufactures_' . date('YmdHis');
    }
}
