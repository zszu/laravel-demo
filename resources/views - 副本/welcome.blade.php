@extends('layout.main')

@section('title' , '欢迎页面')


@section('right_content')
    @parent
    <div class="m_user">
        <span class="st1">到期时间：2020-5-30</span>
        <div class="hd">
            <h3>某某某某某</h3>
            <a href="" class="site">http://xxx.z.sitesmo.com</a>
            <div class="btn">
                <a class="visit" href=""><i></i>访问</a>
                
                <!--点下出弹窗显示当前二维码-->
                <a class="check" href=""><i></i>手机查看</a>
                
                <!--网站到期前一个月显示此按钮-->
                <a class="vip" href=""><i></i>网站续费</a>
                
            </div>
        </div>
        <ul class="list_info">
            <li>
                <a href="">
                    <div class="pic">
                        <img src="images/icon_d4_1.png" alt="" />
                    </div>
                    <h4>设置</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="pic">
                        <img src="images/icon_d5_1.png" alt="" />
                    </div>
                    <h4>栏目管理</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="pic">
                        <img src="images/icon_d6_1.png" alt="" />
                    </div>
                    <h4>信息发布</h4>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="js-show">
                    <div class="pic">
                        <img src="images/icon_d7_1.png" alt="" />
                    </div>
                    <h4>网站体检</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="pic">
                        <img src="images/icon_d8_1.png" alt="" />
                    </div>
                    <h4>功能扩展</h4>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="pic">
                        <img src="images/icon_d9_1.png" alt="" />
                    </div>
                    <h4>定制开发</h4>
                </a>
            </li>
        </ul>
    </div>
    <div class="m_statistics">
        <h3 class="tit">网站访问统计</h3>
        <div class="content">
            <div class="chart1" id="chart1"></div>
        </div>
    </div>


    
    <script src="/admin/js/echarts.js"></script>
       
    <script type="text/javascript">
        var myChart1 = echarts.init(document.getElementById('chart1'));
        myChart1.setOption({
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: ['4-19', '4-20', '4-21', '4-22', '4-23', '4-24', '4-25']
            },
            yAxis: {
                type: 'value',
                min: 0,
                max: 3,
                splitNumber: 3
            },
            grid: {
                left: '3%',
                top: '10%',
                right: '3%',
                bottom: '14%',
            },
            series: [{
                data: [0, 0, 0, 0, 0, 0, 2.6],
                type: 'line',
                areaStyle: {
                    color: '#bedaf6'
                },
                lineStyle: {
                    color: '#7cb5ec'
                },
                itemStyle: {
                    borderColor: '#7cb5ec'
                }
            }]
        });

        // 屏幕改变大小图表跟随改变打小
        window.addEventListener("resize", function() {
            myChart1.resize();
        });
    </script>
        <script src="/admin/js/AutoCheck.js"></script>
    <script src="/admin/js/autoCheckDemo.js"></script>
    <script>
    
        $('.js-show').click(function(event) {
            $('.pop-box').show();
            $('#pop-con1').show();
            AutoCheck.run(checkConfig);

            $("#chart2").circleChart({
                size: 68,
                value: 100,
                speed: 7000,
                text: 0,
                startAngle: 75,
                redraw: "truw",
                animation: 'linearTween',
                onDraw: function(el, circle) {
                    circle.text(Math.round(circle.value) + "%");
                }
            });
        });
        $('.js-close').click(function(event) {
            $('#autoCheckModal').remove();
            $('.pop-box,#pop-con2').hide();
        });

    </script>
    <script src="/admin/js/circleChart.js"></script>
    <script>
        $("#chart3").circleChart({
            size: 68,
            value: 30,
            text: 0,
            speed: 1000,
            startAngle: 75,
            animation: 'linearTween',
            onDraw: function(el, circle) {
                circle.text(Math.round(circle.value) + "%");
            }
        });
    </script>

@endsection

