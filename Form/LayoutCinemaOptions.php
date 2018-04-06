<?php

class LayoutCinema_Form_LayoutCinemaOptions extends Siberian_Form_Options_Abstract {


    public function init() {
        parent::init();

        /** Bind as a create form */
        self::addClass("create", $this);
        self::addClass("form-layout-options", $this);

        $menuposition = $this->addSimpleSlider("menuposition", __("Menu-position"), array(
            "min" => 0,
            "max" => 100,
            "step" => 1,
            "unit" => "%",
        ));
        $menuposition->setValue(10);

        $positionleft = $this->addSimpleRadio("positionleft", __(" "), array(
            "left" => __("Left"),
            "right" => __("Right"),
        ));

        $textTransform = $this->addSimpleSelect("textTransform", __("Title case"), array(
            "title-lowcase" => __("Lower case"),
            "title-uppercase" => __("Upper case"),
        ));

        $title = $this->addSimpleRadio("title", __("Display titles"), array(
            "titlevisible" => __("Visible"),
            "titlehidden" => __("Hidden"),
        ));

        $icon = $this->addSimpleRadio("icon", __("Display Image"), array(
            "iconvisible" => __("Visible"),
            "iconhidden" => __("Hidden"),
        ));

        $height = $this->addSimpleSlider("height", __("Image size"), array(
            "min" => 10,
            "max" => 100,
            "step" => 10,
            "unit" => "px",
        ));
        $height->setValue(50);

        $padding = $this->addSimpleSlider("padding", __("Offset"), array(
            "min" => 0,
            "max" => 100,
            "step" => 1,
            "unit" => "px",
        ));
        $padding->setValue(0);

        $lineheight = $this->addSimpleSlider("lineheight", __("Line-height"), array(
            "min" => 0,
            "max" => 100,
            "step" => 10,
            "unit" => "px",
        ));
        $lineheight->setValue(50);

        $fontsize = $this->addSimpleSlider("fontsize", __("Font-size"), array(
            "min" => 0,
            "max" => 50,
            "step" => 1,
            "unit" => "px",
        ));
        $fontsize->setValue(12);

        $this->addNav("submit", __("Save"), false, false);

        self::addClass("btn-sm", $this->getDisplayGroup("submit")->getElement(__("Save")));

    }

}