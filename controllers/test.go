package controllers

import (
	"github.com/astaxie/beego"
)

type TestController struct{
	beego.Controller
}


func (c * TestController) Get(){
	c.Data["hello"]="yeah"
	c.TplName="test.tpl"
}
