<?php

namespace App\DataTables;

use App\Models\Customer;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CustomersDataTable extends DataTable
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
            ->editColumn('deposits', function ($model) {
                return $model->totalPurchases();
            });
            // ->setRowAttr([
            //     'style' => function($model){
            //         return $model->balance < 0  ? 'color:red;' : 'color:green;';
            //     }
            // ]);
            // ->editColumn('balance', function ($model) {
            //     $negative = '<td class:"negative">'.$model->balance.'</td>';
            //     $positive = '<td class:"positive">'.$model->balance.'</td>';
            //     return $model->balance < 0 ? $negative : $positive;
            // })
            // ->rawColumns(['balance']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Customer $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Customer $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->parameters([
                        'paging' => true,
                        'searching' => true,
                        'info' => false,
                        'searchDelay' => 350,
                        'language' => [
                            'url' => url('js/dataTables/language.json')
                        ],
                        'createdRow' => "function(row, data, index) { 
                            if ( data['balance'] < 0 ) {
                                $('td', row).eq(2).addClass('negative');
                            } else {
                                $('td', row).eq(2).addClass('positive');
                            }
                        }",
                    ])
                    ->setTableId('customers-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            //       ->exportable(false)
            //       ->printable(false)
            //       ->addClass('text-center'),
            Column::make('name'),
            Column::make('address'),
            Column::make('balance'),
            Column::computed('deposits'),
            // Column::make('deposits'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Customers_' . date('YmdHis');
    }
}
