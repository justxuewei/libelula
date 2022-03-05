export default {
    plugins: [
        ['umi-plugin-react', {
            antd: true
        }],
    ],
    routes: [
        {
            path: "/",
            component: "../layouts",
            routes: [
                {
                    path: "helloworld",
                    component: "./helloworld"
                },
                {
                    path: "/",
                    component: "./helloworld"
                },
                {
                    path: "/dashboard",
                    routes: [
                        {
                            path: "/dashboard/analysis",
                            component: "./dashboard/analysis"
                        },
                        {
                            path: "/dashboard/monitor",
                            component: "./dashboard/monitor"
                        },
                        {
                            path: "/dashboard/workplace",
                            component: "./dashboard/workplace"
                        },
                    ]
                }
            ]
        }
    ]
};