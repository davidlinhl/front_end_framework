package controllers

import (
	"github.com/astaxie/beego"
	"fmt"
	"io/ioutil"
	"encoding/json"
)

type NavController struct {
	beego.Controller
}

func (c *NavController) Get() {
	c.TplName="nav.tpl"

	data, err := ioutil.ReadFile("/home/lin/Desktop/go/src/site/conf/navs.json")
    if err != nil {
        fmt.Println("File reading error", err)
		return
    }
	jsonStr:=string(data)
	var mapResult map[string]interface{}
	json_err := json.Unmarshal([]byte(jsonStr), &mapResult)
	if json_err != nil {
		fmt.Println("JsonToMap err: ", err)
		return
	}
	c.Data["navs"]=mapResult
	fmt.Println(mapResult)
}
