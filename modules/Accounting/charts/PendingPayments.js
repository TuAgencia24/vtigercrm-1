var _0x7369=["\x70\x61\x72\x73\x65\x4A\x53\x4F\x4E","\x76\x69\x73\x75\x61\x6C\x69\x7A\x61\x74\x69\x6F\x6E","\x73\x74\x72\x69\x6E\x67","","\x61\x64\x64\x43\x6F\x6C\x75\x6D\x6E","\x6E\x75\x6D\x62\x65\x72","\x23","\x74\x65\x78\x74","\x23\x67\x72\x6F\x75\x70\x62\x79\x20\x6F\x70\x74\x69\x6F\x6E\x3A\x73\x65\x6C\x65\x63\x74\x65\x64","\x54\x79\x70\x65","\x41\x6D\x6F\x75\x6E\x74","\x61\x64\x64\x52\x6F\x77\x73","\x45\x78\x70\x65\x6E\x73\x65","\x75\x6E\x64\x65\x66\x69\x6E\x65\x64","\x61\x6D\x6F\x75\x6E\x74","\x49\x6E\x63\x6F\x6D\x65","\x5F","\x73\x70\x6C\x69\x74","\x2D","\x73\x65\x74\x56\x61\x6C\x75\x65","\x73\x65\x74\x43\x65\x6C\x6C","\x64\x65\x66\x61\x75\x6C\x74\x5F\x63\x75\x72\x72\x65\x6E\x63\x79","\x68\x74\x6D\x6C","\x73\x70\x61\x6E\x5B\x6E\x61\x6D\x65\x3D\x63\x75\x72\x72\x65\x6E\x63\x79\x5D","\x65\x61\x63\x68","\x20","\x76\x61\x6C","\x23\x66\x72\x6F\x6D","\x23\x74\x6F","\x70\x65\x6E\x64\x69\x6E\x67\x5F\x63\x68\x61\x72\x74","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x67\x72\x65\x79","\x77\x69\x64\x74\x68","\x23\x63\x6F\x6E\x74\x65\x6E\x74\x74\x61\x62\x6C\x65","\x62\x6F\x74\x74\x6F\x6D","\x64\x72\x61\x77","\x70\x65\x6E\x64\x69\x6E\x67\x54\x6F\x74\x61\x6C\x5F\x63\x68\x61\x72\x74","\x76\x61\x6C\x75\x65","\x70\x65\x6E\x64\x69\x6E\x67\x5F\x74\x61\x62\x6C\x65"];function drawChart_PendingPayments(payments_json){var nPayments=0;var payments=jQuery[_0x7369[0]](payments_json);for(_obj in payments){nPayments++;} ;var data= new google[_0x7369[1]].DataTable();var dataT= new google[_0x7369[1]].DataTable();var dataTotal= new google[_0x7369[1]].DataTable();data[_0x7369[4]](_0x7369[2],_0x7369[3]);data[_0x7369[4]](_0x7369[5],LBL_PENDING_INCOME_COMBOBOX);data[_0x7369[4]](_0x7369[5],LBL_PENDING_EXPENSE_COMBOBOX);dataT[_0x7369[4]](_0x7369[5],_0x7369[6]);dataT[_0x7369[4]](_0x7369[2],LBL_CHART_GROUP_BY_YEAR);dataT[_0x7369[4]](_0x7369[2],$(_0x7369[8])[_0x7369[7]]());dataT[_0x7369[4]](_0x7369[5],LBL_PENDING_INCOME_COMBOBOX);dataT[_0x7369[4]](_0x7369[5],LBL_PENDING_EXPENSE_COMBOBOX);dataTotal[_0x7369[4]](_0x7369[2],_0x7369[9]);dataTotal[_0x7369[4]](_0x7369[5],_0x7369[10]);data[_0x7369[11]](nPayments);dataT[_0x7369[11]](nPayments);dataTotal[_0x7369[11]](2);var index=0;var totalExpense=0;var totalIncome=0;var n=0;$[_0x7369[24]](payments,function (i,item){var expense= typeof (payments[i][_0x7369[12]])==_0x7369[13]?0:parseInt(payments[i][_0x7369[12]][_0x7369[14]]);var income= typeof (payments[i][_0x7369[15]])==_0x7369[13]?0:parseInt(payments[i][_0x7369[15]][_0x7369[14]]);var group=i[_0x7369[17]](_0x7369[16])[1];var year=i[_0x7369[17]](_0x7369[16])[0];data[_0x7369[19]](index,0,getColumnPrefix(group)+_0x7369[18]+year);data[_0x7369[19]](index,1,income);data[_0x7369[19]](index,2,expense);dataT[_0x7369[20]](index,0,++n);dataT[_0x7369[20]](index,1,i[_0x7369[17]](_0x7369[16])[0]);dataT[_0x7369[20]](index,2,getColumnPrefix(group));dataT[_0x7369[20]](index,3,income);dataT[_0x7369[20]](index,4,expense);totalExpense+=expense;totalIncome+=income;$(_0x7369[23])[_0x7369[22]](payments[i][_0x7369[21]]);index++;} );dataTotal[_0x7369[19]](0,0,LBL_PENDING_INCOME_COMBOBOX);dataTotal[_0x7369[19]](0,1,totalIncome);dataTotal[_0x7369[19]](1,0,LBL_PENDING_EXPENSE_COMBOBOX);dataTotal[_0x7369[19]](1,1,totalExpense);var title=LBL_FROM+_0x7369[25]+$(_0x7369[27])[_0x7369[26]]()+_0x7369[25]+LBL_TO+_0x7369[25]+$(_0x7369[28])[_0x7369[26]]();var chart1= new google[_0x7369[1]].ColumnChart(document[_0x7369[30]](_0x7369[29]));chart1[_0x7369[35]](data,{title:title,titleTextStyle:{fontSize:11,color:_0x7369[31]},width:$(_0x7369[33])[_0x7369[32]](),height:300,legend:_0x7369[34]});var chart2= new google[_0x7369[1]].PieChart(document[_0x7369[30]](_0x7369[36]));chart2[_0x7369[35]](dataTotal,{width:300,height:300,title:_0x7369[3],pieSliceText:_0x7369[37],legend:_0x7369[34]});var table= new google[_0x7369[1]].Table(document[_0x7369[30]](_0x7369[38]));table[_0x7369[35]](dataT,{width:$(_0x7369[33])[_0x7369[32]]()-600});} ;