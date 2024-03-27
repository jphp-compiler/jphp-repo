package php.runtime.env.handler;

import php.runtime.env.CompileScope;
import php.runtime.env.Environment;

@FunctionalInterface
public interface ProgramShutdownHandler {
    void onShutdown(CompileScope scope, Environment env);
}
