<?php

namespace App\DataTables;

use App\Programmer;
use Yajra\DataTables\Services\DataTable;

class ProgrammersDatatables extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('checkbox', 'admin.programmers.btn.checkbox')
            ->addColumn('edit', 'admin.programmers.btn.edit')
            ->addColumn('delete', 'admin.programmers.btn.delete')
            ->rawColumns([
                'edit','delete','checkbox'
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return Programmer::query();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            //  ->addAction(['width' => '80px'])
            // ->parameters($this->getBuilderParameters());
            ->parameters([
                'dom'=>'Blfrtip',
                'lengthMenu'=>[[10,25,50,100,-1],[10,25,50,100,'All Admins']],
                'buttons'=>[
                    ['extend'=>'print','className'=>'btn btn-primary','text'=>'<i class="fa fa-print"></i>'],
                    ['extend'=>'csv','className'=>'btn btn-info','text'=>'<i class="fa fa-file"></i> Export CSV'],
                    ['extend'=>'excel','className'=>'btn btn-success','text'=>'<i class="fa fa-file"></i> Export Excel'],
                    ['extend'=>'reload','className'=>'btn btn-defaults','text'=>'<i class="fa fa-refresh"></i>'],
                    ['text'=>'<i class="fa fa-plus"></i> create Programmer','className'=>'btn btn-success', "action"=>
                        "
                        function(){ window.location.href= '".\URL::current()."/create';   }
                   "],
                    ['text'=>'<i class="fa fa-trash"></i> Delete All','className'=>'btn btn-danger delBtn' ],
                ],
                'initComplete'=>'function(){
                   this.api().columns([2,3]).every(function(){
                   var column=this;
                   var input =document.createElement("input");
                   $(input).appendTo($(column.footer()).empty()).on("keyup",function(){
                   column.search($(this).val(),false,false,true).draw();
                   });
                   });}
                   ',
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
                'name'=>'checkbox',
                'data'=>'checkbox',
                'title'=>'<input type ="checkbox" class="selectAll" onclick="selectAll()">',
                'exportable'=>false,
                'printable'=>false,
                'orderable'=>false,
                'searchable'=>false,
            ],
            [
                'name'=>'id',
                'data'=>'id',
                'title'=>'ID'
            ],[
                'name'=>'name',
                'data'=>'name',
                'title'=>'Admin Name'
            ],[
                'name'=>'email',
                'data'=>'email',
                'title'=>'Email'
            ],[
                'name'=>'job',
                'data'=>'job',
                'title'=>'Job'
            ],[
                'name'=>'created_at',
                'data'=>'created_at',
                'title'=>'created at'
            ],[
                'name'=>'updated_at',
                'data'=>'updated_at',
                'title'=>'updated at'
            ],[
                'name'=>'edit',
                'data'=>'edit',
                'title'=>'Edit',
                'exportable'=>false,
                'printable'=>false,
                'orderable'=>false,
                'searchable'=>false,

            ],[
                'name'=>'delete',
                'data'=>'delete',
                'title'=>'Delete',
                'exportable'=>false,
                'printable'=>false,
                'orderable'=>false,
                'searchable'=>false,

            ]

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Programmers_' . date('YmdHis');
    }
}
