<?php
//const testDB = wx.cloud.database({
//  env: 'test181112'
//})
const db = wx.cloud.database()
const targets = db.collection('bond_Target')

class AddTarget extends CI_Controller {
    public function index() {
      db.collection('bond_Target').add({
        // data 字段表示需新增的 JSON 数据
        data: {
          Text: "目标2",
          LowerLimit:350,
          DateStart:new Date("2018-01-01"),
          DateStop:new Date("2018-12-01"),
          CheckedDates:[
            new Date("2018-05-01"),
            new Date("2018-06-01")
          ]
          //location: new db.Geo.Point(113, 23),
          done: false
        }
      })
      .then(res => {
        console.log(res)
      })



    }
}