using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using System.Net.Http;
using System.IO;

namespace Client
{
    /// <summary>
    /// Logica di interazione per MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        async private void btn_query1_Click(object sender, RoutedEventArgs e)
        {
            string url = @"http://10.13.100.8/yvfivl/index.php?name=1";
            string result = await (Richiesta(url));
            lbl_num.Content = result;
        }

        async private void btn_query2_Click(object sender, RoutedEventArgs e)
        {
            string url = @"http://10.13.100.8/yvfivl/index.php?name=2";
            string result = await (Richiesta(url));
            string r = result.Replace("[", "");
            r = r.Replace("]", "");
            r = r.Replace("{", "");
            r = r.Replace("}", "");
            r = r.Replace("\"", "");

           

            string[] titoli = r.Split(',');
            for (int i = 0; i < titoli.Length; i++)
            {

                if (i % 2 == 0)
                    lst.Items.Add(titoli[i]);
            }


        }


        async static Task<string> Richiesta(string url)
        {
            using (HttpClient client = new HttpClient())
            {
                using (HttpResponseMessage response = await client.GetAsync(url))
                {
                    using (HttpContent content = response.Content)
                    {
                        string mycontent = await content.ReadAsStringAsync();
                        return mycontent;
                    }

                }

            }
        }


    }
}
