function submit(){
    var no1 = ($('input[name=no1]:checked').val());
    var no2 = ($('input[name=no2]:checked').val());
    var no3 = ($('input[name=no3]:checked').val());
    var no4 = ($('input[name=no4]:checked').val());
    var no5 = ($('input[name=no5]:checked').val());
    var no6 = ($('input[name=no6]:checked').val());
    var no7 = ($('input[name=no7]:checked').val());
    var no8 = ($('input[name=no8]:checked').val());
    var no9 = ($('input[name=no9]:checked').val());
    var no10 = ($('input[name=no10]:checked').val());

    var no11 = ($('input[name=no11]:checked').val());
    var no12 = ($('input[name=no12]:checked').val());
    var no13 = ($('input[name=no13]:checked').val());
    var no14 = ($('input[name=no14]:checked').val());
    var no15 = ($('input[name=no15]:checked').val());
    var no16 = ($('input[name=no16]:checked').val());
    var no17 = ($('input[name=no17]:checked').val());
    var no18 = ($('input[name=no18]:checked').val());
    var no19 = ($('input[name=no19]:checked').val());
    var no20 = ($('input[name=no20]:checked').val());

    var no21 = ($('input[name=no21]:checked').val());
    var no22 = ($('input[name=no22]:checked').val());
    var no23 = ($('input[name=no23]:checked').val());
    var no24 = ($('input[name=no24]:checked').val());
    var no25 = ($('input[name=no25]:checked').val());
    var no26 = ($('input[name=no26]:checked').val());
    var no27 = ($('input[name=no27]:checked').val());
    var no28 = ($('input[name=no28]:checked').val());
    var no29 = ($('input[name=no29]:checked').val());
    var no30 = ($('input[name=no30]:checked').val());

    var no31 = ($('input[name=no31]:checked').val());
    var no32 = ($('input[name=no32]:checked').val());
    var no33 = ($('input[name=no33]:checked').val());
    var no34 = ($('input[name=no34]:checked').val());
    var no35 = ($('input[name=no35]:checked').val());
    var no36 = ($('input[name=no36]:checked').val());
    var no37 = ($('input[name=no37]:checked').val());
    var no38 = ($('input[name=no38]:checked').val());
    var no39 = ($('input[name=no39]:checked').val());
    var no40 = ($('input[name=no40]:checked').val());

    var no41 = ($('input[name=no41]:checked').val());
    var no42 = ($('input[name=no42]:checked').val());
    var no43 = ($('input[name=no43]:checked').val());
    var no44 = ($('input[name=no44]:checked').val());
    var no45 = ($('input[name=no45]:checked').val());
    var no46 = ($('input[name=no46]:checked').val());
    var no47 = ($('input[name=no47]:checked').val());
    var no48 = ($('input[name=no48]:checked').val());
    var no49 = ($('input[name=no49]:checked').val());
    var no50 = ($('input[name=no50]:checked').val());

    alert(no1 + " "+ no2);
    ajax({
        method: 'POST',
        url: 'services/submit.php',
        data: {
            no1:no1,
            no2:no2,
            no3:no3,
            no4:no4,
            no5:no5,
            no6:no6,
            no7:no7,
            no8:no8,
            no9:no9,
            no10:no10,

            no11:no11,
            no12:no12,
            no13:no13,
            no14:no14,
            no15:no15,
            no16:no16,
            no17:no17,
            no18:no18,
            no19:no19,
            no20:no20,

            no21:no21,
            no22:no22,
            no23:no23,
            no24:no24,
            no25:no25,
            no26:no26,
            no27:no27,
            no28:no28,
            no29:no29,
            no30:no30,

            no31:no31,
            no32:no32,
            no33:no33,
            no34:no34,
            no35:no35,
            no36:no36,
            no37:no37,
            no38:no38,
            no39:no39,
            no40:no40,

            no41:no41,
            no42:no42,
            no43:no43,
            no44:no44,
            no45:no45,
            no46:no46,
            no47:no47,
            no48:no48,
            no49:no49,
            no50:no50,
        },
        success: function(response){
            window.location("Inbullz.php")
        },error: function(e){
            //window.location = 'login.html';
            console.log("not success");
        }
    })
}