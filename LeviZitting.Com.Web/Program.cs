using LeviZitting.Com.Web;

var builder = Host.CreateDefaultBuilder(args)
    .ConfigureUmbracoDefaults()
    .ConfigureWebHostDefaults(webBuilder =>
    {
        webBuilder.UseStaticWebAssets();
        webBuilder.UseStartup<Startup>();
    });

var app = builder.Build();

app.Run();
