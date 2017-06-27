using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;
using System.Data.SqlClient;

namespace demo
{
    public partial class Main : Form
    {
        public Main()
        {
            InitializeComponent();
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void buttonOK_Click(object sender, EventArgs e)
        {
            string Username = this.textBoxUserName.Text;
            Username = Username.Trim();
            string Password = this.textBoxPassword.Text;
            string num = "Data Source=DESKTOP-NS08RMD;Initial Catalog=STUDENT;Integrated Security=True";
            SqlConnection connect = new SqlConnection(num);  //建立一个数据库连接对象connect
            string sql = "select * from users where num='" + this.textBoxUserName.Text + "' and password='" + this.textBoxPassword.Text + "'";
            SqlCommand command = new SqlCommand(sql, connect);   //建立一个新的SQL命令
            connect.Open();

            int num1 = Convert.ToInt32(command.ExecuteScalar());
            if (num1 > 0)
            {
                MessageBox.Show("登入成功！");
            }
            else
            {
                MessageBox.Show("对不起，你输入的账号或者密码错误！");
            }
            connect.Close();

        }
    }
}
