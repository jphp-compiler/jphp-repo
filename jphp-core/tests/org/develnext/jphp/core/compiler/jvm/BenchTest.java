package org.develnext.jphp.core.compiler.jvm;

import org.junit.Assert;
import org.junit.FixMethodOrder;
import org.junit.Test;
import org.junit.runner.RunWith;
import org.junit.runners.JUnit4;
import org.junit.runners.MethodSorters;
import php.runtime.Memory;

@RunWith(JUnit4.class)
@FixMethodOrder(MethodSorters.NAME_ASCENDING)
public class BenchTest extends JvmCompilerCase {

    @Test
    public void testNBody(){
        Memory memory = includeResource("bench/n-body.php");
        Assert.assertEquals("success", memory.toString());
    }
}
