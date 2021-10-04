class demopecahan
{
    public static void main(String [] args)
    {
        Pecahan p;
        int x, y;
        Pecahan d1 = new Pecahan(3,2);
        System.out.print("objek1 : ");
        System.out.print(+d1.getpembilang());
        System.out.print("/");
        System.out.print(+d1.getpenyebut());
        System.out.println();
        //pecahan hasil = new pecahan(x, y);
        p = d1.tambah(d1);
        x = p.pembilang;
        y = p.penyebut;
        System.out.print( "hasil : " +x);
        System.out.print("/");
        System.out.print(+y);
        System.out.println();
       }
}
