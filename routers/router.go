package routers

import (
	"site/controllers"
	"github.com/astaxie/beego"
)

func init() {
	beego.Router("/", &controllers.IndexController{})
	beego.Router("/test",&controllers.TestController{})
	beego.Router("/nav",&controllers.NavController{})
}
