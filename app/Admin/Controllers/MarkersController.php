<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Markers;
use Illuminate\Http\JsonResponse;
class MarkersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Markers';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Markers());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('address', __('Address'));
        $grid->column('lat', __('Lat'));
        $grid->column('lng', __('Lng'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Markers::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('address', __('Address'));
        $show->field('lat', __('Lat'));
        $show->field('lng', __('Lng'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Markers());

        $form->text('name', __('Name'));
        $form->text('address', __('Address'));
        $form->text('lat', __('Lat'));
        $form->text('lng', __('Lng'));

        return $form;
    }

     public function getMarkers(): JsonResponse
        {
            $markers = Markers::all();

            $data = $markers->map(function($marker) {
                return [
                    'id' => $marker->id,
                    'name' => htmlspecialchars_decode($marker->name),
                    'address' => htmlspecialchars_decode($marker->address),
                    'lat' => $marker->lat,
                    'lng' => $marker->lng,
                    'category' => $marker->category,
                ];
            });

            return response()->json(['data' => ['marker' => $data]]);
        }

}
